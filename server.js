const express = require("express");
const app = express();


const PORT = process.env.PORT || 4000;

app.set("view engine", "ejs");

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

app.listen(PORT,()=>{
    console.log(`server running on port ${PORT}`);


})



//
app.use(express.static('public'));
app.use(express.static('app'));
