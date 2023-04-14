const express = require("express");
const app = express();
const {pool} = require("./dbconfig");
const bcrypt = require("bcrypt");


const PORT = process.env.PORT || 4000;

app.set("view engine", "ejs");
app.use(express.urlencoded({extended: false}));

app.get("/",(req, res)=>{
    res.render("index");
});

app.get("/users/registro",(req,res)=>{
res.render("registro");
});

app.get("/users/login",(req,res)=>{
    res.render("login");
    });
    
app.get("/users/dashboard",(req,res)=>{
        res.render("dashboard" , {usuario: "andrews"});
        });

app.post("/users/registro", async(req,res)=>{
    let{usuario,nombre,apellido,fecha,email,rol,password,password2} = req.body;
    console.log({
        usuario,
        nombre,
        apellido,
        fecha,
        email,
        rol,
        password,
        password2,
    });

    let errors = [];

    if(!usuario || !nombre || !apellido || !fecha || !email || !rol || !password ||!password2){
        errors.push({message: "Completar todos los campos"});
    }

    if(password.length < 6){
        errors.push({message: "La contraseña debe de tener al menos 6 caracteres"});
    }

    if(password != password2){
        errors.push({message: "Las contraseñas no coinciden"});
    }

    if(errors.length > 0){
        res.render("registro", {errors});
        
    }else{
        //validasion formulario
        let hashedpassword = await bcrypt.hash(password,10);
        console.log(hashedpassword);

         pool.query(
            `SELECT * FROM usuarios
            WHERE usuario = $1`,
            [usuario],
            (err, results)=>{
                if(err){
                    throw err;
                }
                console.log("reaches here");
                console.log(results.rows);
            }
        );
    }
});

app.listen(PORT,()=>{
    console.log(`server running on port ${PORT}`);

});


//
app.use(express.static('public'));
app.use(express.static('app'));
