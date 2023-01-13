import { defineStore } from "pinia";

export const useTaskStore = defineStore("task", {
    state: () => ({
        name: "TaskMaster",
        tasks: [
            { id: 1, name: "Task 1", completed: false },
            { id: 2, name: "Task 2", completed: true },
            { id: 3, name: "Task 3", completed: false },
        ],
    }),
    // getter have the ability to manipulate the state to get specific data like a computed property
    getters: {
        compliment() { 
            return this.name + " is the best";
        },
        completedTasks() { 
            return this.tasks.filter((task) => task.completed);
        }

    }
});
