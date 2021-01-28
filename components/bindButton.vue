<template>
<view>
  <button v-bind:onPress="handleBtnClickCount" :title="btnTitle" />
  <text class="text-container">{{btnClickCount}}</text>
</view>
</template>
<script>
export default {
  data: function() {
    return {
      btnTitle: "Click Me",
      btnClickCount: 0,
    };
  },
  methods: {
    handleBtnClickCount: function() {
      this.btnClickCount = this.btnClickCount + 1;
    }
  }
};
</script>
<style>
.container {
  background-color: white;
  align-items: center;
  justify-content: center;
  flex: 1;
}
.text-container {
  color: blue;
  padding: 2;
  font-size: 20;
}
</style>
