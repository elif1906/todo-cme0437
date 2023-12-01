import './bootstrap';

window.addEventListener("load", () => {

    const todos = document.getElementsByClassName("todo-item");

    for(let i = 0; i < todos.length; ++i){
        const item = todos[i];
        item.addEventListener("change", (e) => {
            console.log("im edited", item.dataset.id);
            window.axios.put("/", `id=${item.dataset.id}&description=${item.value}`);
        })
    }
})

