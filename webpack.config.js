const path = require("path");

module.exports = {
  entry: "./resources/js/tiny.js",
  output: {
    filename: "tiny.js",
    path: path.resolve(__dirname, "js"),
  },
};
