<template>
  <view class="container">
    <animatedView
        class="animated-view-style"
        :style="{
        marginLeft: marginLeft,
        marginTop: marginTop,
        backgroundColor: interpolateColor,
        transform: [{rotateY},{rotateX}]
      }"
    />
  </view>
</template>
<style>
.animated-view-style{
  height: 100;
  width: 100;
}
.container{
  padding:40;
}
</style>

<script>
export default {
  data: function() {
    return {
      growthValue: 0,
      growth: 0,
    };
  },
  created: function() {
    this.growthValue = new animated.Value(0);
    this.animatedValueRotate = new animated.Value(0);
  },
  mounted: function() {
    this.animateGrowth();
  },
  methods: {
    animateGrowth: function() {
      this.growthValue.setValue(0);
      Animated
          .timing(this.growthValue, {
            toValue: 1,
            duration: 1000,
            easing: Easing.linear
          })
          .start(() => {
            // this.animateGrowth();
          });
      this.growth = this.growthValue.interpolate({
        inputRange: [0, 0.5, 1],
        outputRange: [0, 200, 0]
      });
    }
  }
};
</script>
