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

    app.get("/users/acceso",(req,res)=>{
        res.render("acceso",{rol:req.user.rol});
        });

        
    /* perfil */
            app.get("/users/perfil",(req,res)=>{

                res.render("perfil", 
                {id: req.user.id,
                nombre: req.user.nombre,
                 rol:req.user.rol}
             
                );
            });
            
        
     
        /* perfil */

app.post("/users/registro", async(req,res)=>{
    let{usuario,nombre,apellido,email,fecha,pass,rol,password2, pres, ress} = req.body;
    console.log({
        usuario,
        nombre,
        apellido,
        email,
        fecha,
        pass,
        rol,
        password2,
        pres,
        ress,
    });

    let errors = [];

    if(!usuario || !nombre || !apellido || !fecha || !email || !rol || !pass ||!password2 ||!pres ||!ress){
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
                        `INSERT INTO usuarios (usuario, nombre, apellido, email, fecha, pass, rol, pres, ress)
                        VALUES($1, $2, $3, $4, $5, $6, $7, $8, $9)
                        RETURNING id, pass`,[usuario, nombre, apellido, email, fecha, hashedpassword,rol, pres, ress],(err,results)=>{
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
    successRedirect: "/users/tienda",
    failureRedirect: "/users/login",
    failureFlash: true
})
);

app.post(
    "/users/loginadmi", 
passport.authenticate("local", {
    successRedirect: "/users/acceso",
    failureRedirect: "/users/loginadmi",
    failureFlash: true
})
);


/* 
 */



app.listen(PORT,()=>{
    console.log(`server running on port ${PORT}`);

});


//
app.use(express.static('public'));
app.use(express.static('app'));



/* direcciones  */

app.get("/users/tienda",(req,res)=>{
    res.render("tienda",{nombre: req.user.nombre});
    
    });

    app.get("/users/loginadmi",(req,res)=>{
        res.render("loginadmi");
        
        });

  



        app.get("users/logout",(req, res)=>{
            req.logOut();
            req.flash("Inicio de secion cerrada");
            res.redirect("users")
        })

        app.get("/users/registroadmin",(req,res)=>{
            res.render("registroadmin",{rol:req.user.rol});
            });

            app.get("/users/passrecovery",(req,res)=>{
                res.render("passrecovery");
                });
        

/*  */

/* post registro admin */
app.post("/users/registroadmin", async(req,res)=>{
    let{usuario,nombre,apellido,email,fecha,pass,rol,password2, pres, ress} = req.body;
    console.log({
        usuario,
        nombre,
        apellido,
        email,
        fecha,
        pass,
        rol,
        password2,
        pres,
        ress,
    });

    let errors = [];

    if(!usuario || !nombre || !apellido || !fecha || !email || !rol || !pass ||!password2||!pres||!ress){
        errors.push({message: "Completar todos los campos"});
    }

    if(pass.length < 6){
        errors.push({message: "La contraseña debe de tener al menos 6 caracteres"});
    }
    

    if(pass != password2){
        errors.push({message: "Las contraseñas no coinciden"});
    }

    if(errors.length > 0){
        res.render("registroadmin", {errors});
        
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
                    res.render("registroadmin",{errors});
                }else{
                    pool.query(
                        `INSERT INTO usuarios (usuario, nombre, apellido, email, fecha, pass, rol,pres,ress)
                        VALUES($1, $2, $3, $4, $5, $6, $7, $8, $9)
                        RETURNING id, pass`,[usuario, nombre, apellido, email, fecha, hashedpassword,rol,pres,ress],(err,results)=>{
                            if(err){
                                throw err
                            }
                            console.log(results.rows);
                             req.flash("success_msg","Registro completado");
                            res.redirect("/users/registroadmin"); 
                        }

                    )
                }
            }
        );
    }
});

/* fin */
    
/* post registro passrecovery */
app.post("/users/passrecovery", async(req,res)=>{
    let{usuario,pass, ress,password2} = req.body;
    console.log({
        usuario,
        pass,
        ress,
        password2,
    });

    let errors = [];

    if(!usuario || !pass || !ress ||!password2){
        errors.push({message: "Completar todos los campos"});
    }

    if(pass.length < 6){
        errors.push({message: "La contraseña debe de tener al menos 6 caracteres"});
    }
    

    if(pass != password2){
        errors.push({message: "Las contraseñas no coinciden"});
    }

    if(errors.length > 0){
        res.render("passrecovery", {errors});
        
    }else{
        //validasion formulario
        let hashedpassword = await bcrypt.hash(pass,10);
        console.log(hashedpassword);

    
        pool.query(
            `UPDATE usuarios SET pass = $2 WHERE usuario = $1 AND ress = $3`,[usuario, hashedpassword, ress],(err,results)=>{
                if(err){
                    throw err
                }
                console.log(results.rows);
                 req.flash("success_msg","Actualizacion completada");
                res.redirect("/users/login"); 
            }

        )
        
    
    }

});


/* prueba inicio administrador */

/* actualizacion perfil */


    
/* post registro passrecovery */
app.post("/users/perfil", async(req,res)=>{
    let{id, nombre, apellido, email, pass,password2} = req.body;
    console.log({
        id,
        nombre,
        apellido,
        email,
        pass,
        password2,
        
    });

    let errors = [];

    if(!id || !nombre|| !apellido|| !email || !pass ||!password2){
        errors.push({message: "Completar todos los campos"});
    }


    if(pass.length < 6){
        errors.push({message: "La contraseña debe de tener al menos 6 caracteres"});
    }
    

    if(pass != password2){
        errors.push({message: "Las contraseñas no coinciden"});
    }

    if(errors.length > 0){
        res.render("perfil", {errors});
        
    }else{
        //validasion formulario
        let hashedpassword = await bcrypt.hash(pass,10);
        console.log(hashedpassword);

        pool.query(
            `UPDATE usuarios SET nombre = $2, apellido = $3, email = $4, pass = $5 WHERE id = $1`,[id, nombre, apellido, email, hashedpassword],(err,results)=>{
                if(err){
                    throw err
                }


                console.log(results.rows);
                 req.flash("success_msg","Actualizacion completada Iniciar sesion Nuevamente");
                res.redirect("/users/login"); 
            }

        )
        
    
    }

});


/* fin*/