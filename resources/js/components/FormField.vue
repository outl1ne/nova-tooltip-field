<template>
  <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
    <template #field>
      <Excerpt :content="field.content" :plain-text="true" :should-show="field.shouldShow" class="o1-tooltip-detail" />
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova';

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  methods: {
    setInitialValue() {
      this.value = this.field.value || '';
    },

    fill(formData) {
      //
    },
  },
};
</script>
