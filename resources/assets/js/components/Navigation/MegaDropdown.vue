<template>
  <div class="mega-dropdown" :style="{'max-height':height + 'px',}" :class="{'show':visible}">
    <slot></slot>
  </div>
</template>

<script>
export default {
  data() {
    return {
      visible: false
    };
  },
  props: {
    // Basic type check (`null` and `undefined` values will pass any type validation)
    propA: Number,
    // Multiple possible types
    propB: [String, Number],
    // Required string
    height: {
      type: Number,
      required: true
    }
  },
  mounted() {
    console.log(this.height);
  },
  methods: {
    show() {
      this.visible = true;
    },
    toggle(visible) {
      this.visible = visible;
    }
  }
};
</script>

<style lang="scss" scoped>
</style>