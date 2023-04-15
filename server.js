const express = require("express");
const app = express();
const {pool} = require("./dbconfig");
const bcrypt = require("bcrypt");
const session = require("express-session");
const flash = require("express-flash");
const passport = require("passport");

const initializePassport = require("./passportconfig");

initializePassport(passport);


const PORT = process.env.PORT || 4000;

app.set("view engine", "ejs");
app.use(express.urlencoded({extended: false}));

app.use(session({
    secret:"secret",

    resave: false,

    saveUninitialized: false
})
);

app.use(flash())

app.get("/",(req, res)=>{
    res.render("index");
});

app.use(passport.initialize());
app.use(passport.session());

app.get("/users/registro",(req,res)=>{
res.render("registro");
});

app.get("/users/login",(req,res)=>{
    res.render("login");
    });
    
app.get("/users/dashboard",(req,res)=>{
        res.render("dashboard" , {usuario: req.user.nombre});
        });

app.post("/users/registro", async(req,res)=>{
    let{usuario,nombre,apellido,email,fecha,pass,rol,password2} = req.body;
    console.log({
        usuario,
        nombre,
        apellido,
        email,
        fecha,
        pass,
        rol,
        password2,
    });

    let errors = [];

    if(!usuario || !nombre || !apellido || !fecha || !email || !rol || !pass ||!password2){
        errors.push({message: "Completar todos los campos"});
    }

    if(pass.length < 6){
        errors.push({message: "La contraseña debe de tener al menos 6 caracteres"});
    }

    if(pass != password2){
        errors.push({message: "Las contraseñas no coinciden"});
    }

    if(errors.length > 0){
        res.render("registro", {errors});
        
    }else{
        //validasion formulario
        let hashedpassword = await bcrypt.hash(pass,10);
        console.log(hashedpassword);

         pool.query(
            `SELECT * FROM usuarios
            WHERE usuario = $1`,
            [usuario],
            (err, results)=>{
                if(err){
                    throw err;
                }
                
                console.log(results.rows);

                if(results.rows.length>0){
                    errors.push({message: "El nombre de usuario ya se encuentra registrado"});
                    res.render("registro",{errors});
                }else{
                    pool.query(
                        `INSERT INTO usuarios (usuario, nombre, apellido, email, fecha, pass, rol)
                        VALUES($1, $2, $3, $4, $5, $6, $7)
                        RETURNING id, pass`,[usuario, nombre, apellido, email, fecha, hashedpassword,rol],(err,results)=>{
                            if(err){
                                throw err
                            }
                            console.log(results.rows);
                            req.flash("success_msg","Registro completado");
                            res.redirect("/users/login");
                        }

                    )
                }
            }
        );
    }
});

app.post(
    "/users/login", 
passport.authenticate("local", {
    successRedirect: "/users/dashboard",
    failureRedirect: "/users/login",
    failureFlash: true
})
);

app.listen(PORT,()=>{
    console.log(`server running on port ${PORT}`);

});



//
app.use(express.static('public'));
app.use(express.static('app'));
