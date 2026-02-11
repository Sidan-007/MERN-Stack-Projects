import React from "react";

function Navbar() {
  return (
    <div className="sticky bottom-0">
      <nav className="bg-gray-800 text-white flex justify-around items-center p-4">
        <div className="logo">
          <h1 className="font-bold text-xl hover:font-extrabold rounded-lg cursor-pointer">
            iTask | My To-Do List
          </h1>
        </div>
        <ul className="flex gap-5 text-lg items-center">
          <li className="hover:font-bold px-0.5 rounded-lg cursor-pointer">
            Home
          </li>
          <li className="hover:font-bold px-0.5 rounded-lg cursor-pointer">
            Your Task
          </li>
        </ul>
      </nav>
    </div>
  );
}

export default Navbar;
