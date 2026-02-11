import { useState } from "react";
import Navbar from "./components/Navbar";
import Todo from "./components/Todo";
import "./App.css";

function App() {
  return (
    <>
      <div className="nav">
        <Navbar />
      </div>
      <div className="main flex justify-center items-center">
        <Todo />
      </div>
    </>
  );
}

export default App;
