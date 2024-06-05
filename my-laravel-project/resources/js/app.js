// import "./bootstrap";
import axios from "axios";

axios.defaults.baseURL = "http://your-laravel-app.test/api";
axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
