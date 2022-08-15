<template>
  <Tooltip :field="field" />
</template>

<script>
import Tooltip from './Tooltip';

export default {
  components: { Tooltip },
  props: ['resourceName', 'field'],
};
</script>
