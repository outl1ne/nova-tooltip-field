<template>
  <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
    <template #field> </template>
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
