import React, { useState, useEffect } from "react";
import { v4 as uuidv4 } from "uuid";

function Todo() {
  const [todos, setTodos] = useState(() => {
    const saved = localStorage.getItem("todos");
    return saved ? JSON.parse(saved) : [];
  });

  const [todo, setTodo] = useState("");
  const [showFinished, setShowFinished] = useState(true);

  useEffect(() => {
    localStorage.setItem("todos", JSON.stringify(todos));
  }, [todos]);

  const handleChange = (e) => {
    setTodo(e.target.value);
  };

  const handleAdd = () => {
    if (todo.length <= 3) return;
    setTodos([...todos, { id: uuidv4(), todo, isCompleted: false }]);
    setTodo("");
  };

  const handleEdit = (id) => {
    let t = todos.find((i) => i.id === id);
    setTodo(t.todo);
    let newTodos = todos.filter((item) => item.id !== id);
    setTodos(newTodos);
  };

  const handleDelete = (id) => {
    let newTodos = todos.filter((item) => item.id !== id);
    setTodos(newTodos);
  };

  const toggleFinished = () => {
    setShowFinished(!showFinished);
  };

  const handleCheckbox = (id) => {
    let newTodos = todos.map((item) => {
      if (item.id === id) {
        return { ...item, isCompleted: !item.isCompleted };
      }
      return item;
    });
    setTodos(newTodos);
  };

  return (
    <div className="flex justify-center w-2/3 min-h-[87vh] bg-gray-900 py-8 m-5 rounded-xl">
      <div className="bg-gray-800 text-white p-8 rounded-2xl w-full max-w-[60vw] mx-4">
        <h1 className="font-bold text-2xl mb-6 text-center">
          Manage Your Tasks
        </h1>

        <div className="flex flex-col gap-4">
          <input
            onChange={handleChange}
            value={todo}
            type="text"
            className="bg-white text-black p-3 rounded-lg w-full"
            placeholder="What needs to be done?"
          />
          <button
            onClick={handleAdd}
            disabled={todo.length <= 3}
            className="bg-blue-600 disabled:bg-blue-900 text-white font-bold hover:bg-blue-500 rounded-lg p-3 transition-colors"
          >
            Save Task
          </button>
        </div>

        <div className="flex items-center gap-2 mt-6 mb-4">
          <input
            type="checkbox"
            checked={showFinished}
            onChange={toggleFinished}
            className="w-4 h-4"
          />
          <label className="text-sm">Show Finished Tasks</label>
        </div>

        <div className="h-0.5 bg-gray-600 my-4"></div>

        <h2 className="text-xl font-bold mb-4">Your To-Do List</h2>

        <div className="flex flex-col gap-3">
          {todos.length === 0 && (
            <div className="text-gray-400 text-center">
              No Panding Task To Complete.
            </div>
          )}

          {todos.map((item) => {
            if (!showFinished && item.isCompleted) return null;

            return (
              <div
                key={item.id}
                className="flex items-center justify-between bg-gray-700 p-4 rounded-xl"
              >
                <div className="flex items-center gap-4 wrap-anywhere">
                  <input
                    type="checkbox"
                    checked={item.isCompleted}
                    onChange={() => handleCheckbox(item.id)}
                    className="h-5 w-5 cursor-pointer"
                  />
                  <span
                    className={
                      item.isCompleted
                        ? "line-through text-gray-400"
                        : "text-white"
                    }
                  >
                    {item.todo}
                  </span>
                </div>
                <div className="flex gap-2">
                  <button
                    onClick={() => handleEdit(item.id)}
                    className="bg-blue-600 hover:bg-blue-500 p-2 px-4 rounded-lg text-sm"
                  >
                    Edit
                  </button>
                  <button
                    onClick={() => handleDelete(item.id)}
                    className="bg-red-600 hover:bg-red-500 p-2 px-4 rounded-lg text-sm"
                  >
                    Delete
                  </button>
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </div>
  );
}

export default Todo;
