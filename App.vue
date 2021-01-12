<template>
  <view class="container">
    <text class="text-color-primary"></text>

    <button
        :on-press="onPressLearnMore"
        title="Gran Canaria"
        color="#841584"
        accessibility-label="Learn more about this purple button"
    />
  </view>
</template>
<script>
export default {
  methods: {
    onPressLearnMore: function() {
      alert('Pas op he')
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
