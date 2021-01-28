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
        v-for="todo in todos"
        :key="todo.text"
        :item="todo"
    />


  </view>
</template>


<script>
import TodoItem from "./components/todoItem";
import BindButton from "./components/bindButton";

export default {
  components: { BindButton, TodoItem },
  data: function() {
    return {
      todos: [
        { id: 1, text: "Learn JavaScript" },
        { id: 2, text: "Learn Vue" },
        { id: 3, text: "Build something awesome" }
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
