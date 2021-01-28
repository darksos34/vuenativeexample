<template>
  <view class="container" >
    <button v-on:click="count += 50" title="Press me" />
    <text>{{ counter }}</text>
  </view>
</template>

<script>
export default {
  data: function() {
    return {
      counter: 0
    };
  }
};
</script>

<style>

button {
  width: 100px;
  height: 35px;
  background-color: #FFCE00;
  justify-content: center;
  align-items: center;
  margin-bottom: 5px;
}

</style>
