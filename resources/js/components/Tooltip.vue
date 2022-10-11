<template>
  <Tippy
    :content="field.content"
    :allowHTML="field.allowHtml"
    class="o1-cursor-pointer o1-flex o1-text-90 hover:o1-text-primary"
    :class="{
      'o1-justify-center': field.textAlign === 'center',
      'o1-justify-start': field.textAlign === 'left',
      'o1-justify-end': field.textAlign === 'right',
    }"
  >
    <div class="o1-mr-2" v-if="field.text && field.iconPosition === 'right'">{{ field.text }}</div>
    <img v-if="field.iconUrl" :width="field.size || 25" :src="field.iconUrl" />
    <span class="o1-inline-flex o1-text-70" :class="field.textAlign" v-if="field.iconPath" v-html="field.iconPath" />
    <div class="o1-ml-2" v-if="field.text && field.iconPosition === 'left'">{{ field.text }}</div>
  </Tippy>
</template>

<script>
import { Tippy } from 'vue-tippy';
import 'tippy.js/dist/tippy.css';

export default {
  props: ['field'],
  components: { Tippy },
};
</script>
