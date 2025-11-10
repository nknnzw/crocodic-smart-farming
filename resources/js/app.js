import './bootstrap';
import React from "react";
import ReactDOM from "react-dom/client";
import SplashScreen from "./components/SplashScreen";

ReactDOM.createRoot(document.getElementById("splash-root")).render(
  <React.StrictMode>
    <SplashScreen />
  </React.StrictMode>
);
