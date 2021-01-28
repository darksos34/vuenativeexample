<template>
<view>
  <button v-bind:onPress="handleBtnClickCount" :title="btnTitle" />
  <text class="button-text">{{btnClickCount}}</text>
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
.button-text{

  width: 100px;
  height: 35px;
  background-color: #FFCE00;
  justify-content: center;
  align-items: center;
  margin-bottom: 5px;
}


</style>
