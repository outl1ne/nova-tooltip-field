import IndexField from './components/IndexField';
import DetailField from './components/DetailField';
import FormField from './components/FormField';

Nova.booting((Vue, store) => {
  Vue.component('index-o1-tooltip-field', IndexField);
  Vue.component('detail-o1-tooltip-field', DetailField);
  Vue.component('form-o1-tooltip-field', FormField);
});
