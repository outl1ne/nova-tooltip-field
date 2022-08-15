<template>
  <VueTippy class="o1-cursor-pointer o1-items-center o1-flex o1-justify-center o1-text-90 hover:o1-text-primary">
    <span class="o1-mr-2" v-if="field.text && field.iconPosition === 'right'">{{ field.text }}</span>
    <img v-if="field.iconUrl" :width="field.size || 25" :src="field.iconUrl" />
    <span class="o1-inline-flex o1-text-70" v-if="field.iconPath" v-html="field.iconPath"></span>
    <span class="o1-ml-2" v-if="field.text && field.iconPosition === 'left'">{{ field.text }}</span>
  </VueTippy>
</template>

<script>
import VueTippy from 'vue-tippy';

export default {
  props: ['field'],
  components: { VueTippy },
};
</script>
