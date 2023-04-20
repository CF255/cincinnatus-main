const localstrategy = require("passport-local").Strategy;

const { authenticate, use } = require("passport");
const {pool} = require("./dbconfig");

const bcrypt = require("bcrypt");

function initialize(passport){
    const authenticateUser = (usuario, pass, done)=>{

        
   
    
                    pool.query(
                        `SELECT * FROM usuarios WHERE usuario = $1`,[usuario],(err,results)=>{
                            if(err){
                                throw err;
                            }
                            console.log(results.rows);
                            if(results.rows.length > 0 ){
                                const user = results.rows[0];
                            bcrypt.compare(pass, user.pass,(err, isMatch)=>{
                                if(err){
                                    throw err
                                }
            
                                if(isMatch){
                                    return done(null, user);
                                }else{
                                    return done(null, false, {message: "La contraseña no es correcta"});
                                }
                            });
                        }else{
                            return done(null, false, {message: "El nombre de usuario no esta registrado"});
                        }
                        }
                    );

       
    };
    passport.use(new localstrategy({
        usernameField: "usuario",
        passwordField: "pass"

    }, 
    authenticateUser
    )
    );

    passport.serializeUser((user, done)=> done(null, user.id));

    passport.deserializeUser((id, done)=>{
        pool.query(
            `SELECT * FROM usuarios WHERE id = $1`,[id],(err, results)=>{
                if(err){
                    throw err
                }
                return  done(null, results.rows[0]);
            }
        )
    })
}

module.exports = initialize;