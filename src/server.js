const express = require("express");
const path = require("path");
const app = express();
const phpExpress = require("php-express")({
    binPath: "C:\\xampp\\php\\php.exe",
});

// Set view engine to php-express
app.engine("php", phpExpress.engine);
app.set("view engine", "php");
app.set("views", path.join(__dirname, "pages"));
app.set(express.static(path.join(__dirname, "public"))); // Serve static files

app.all(/.+\.php$/, phpExpress.router);

app.get("/", (req, res) => {
    res.render("index");
});

app.listen(3000, () => {
    console.log("Server is running on port 3000");
});
