<template>
  <view class="container">
    <text class="text-color-primary"></text>
    <status-bar
        background-color="blue"
        bar-style="light-content"
    />
    <button
        :on-press="onPressLearnMore"
        title="Mijn knop"
        color="#841584"
        accessibility-label="Learn more about this purple button"
    />
  </view>
</template>
<script>

export default {
  methods: {
    onPressLearnMore: function() {
      alert('Welkom Jordy Coder')
    }
  }
}
</script>
<style>
.container {
  background-color: white;
  align-items: center;
  justify-content: center;
  flex: 1;
}
.text-color-primary {
  color: blue;
}
</style>
