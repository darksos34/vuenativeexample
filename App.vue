<template>
  <view class="container">
    <!--
      Now we provide each todo-item with the todo object
      it's representing, so that its content can be dynamic.
      We also need to provide each component with a "key",
      which will be explained later.
    -->
    <todo-item
        class="text-container"
        v-for="todo in todos"
        :key="todo.text"
        :item="todo"
    />

    <bind-button
        class="text-container"

    />

      <button v-on:click="count += 1" title="Add 1" />
      <text>{{ counter }}</text>


  </view>
</template>

<script>
import TodoItem from "./components/Examples/todoItem";
import BindButton from "./components/Examples/bindButton";
import Button from "./components/Examples/Button";

export default {
  components: {Button, BindButton, TodoItem },
  data: function() {
    return {
      todos: [
        { id: 1, text: "Learn JavaScript", },

        { id: 2, text: "Learn Vue" },
        { id: 3, text: "Build something awesome" },
        { id: 4, text: "Create Something Unique" },
        { id: 5, text: "Analyse and find new project" },
        { id: 6, text: "Test your application" },
        { id: 7, text: "Write Documentation" },
        { id: 8, text: "Show your app to friends" }
    ]


    };
  }

};
</script>
<style>
.container {
  background-color: lightblue;
  align-items: center;
  justify-content: center;
  flex: 1;
}
.text-container {
  color: blue;
  padding: 2px;
  font-size: 22px;
}


</style>
