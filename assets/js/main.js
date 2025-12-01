const formId = '784e24ab-2c17-49169aaf-08f152b02fd6-a5b48d54-c068-434c-992a-a2f5513b7ada';

import { getFormData, sendFormData } from './components/hubspot-form.js';

document.addEventListener('DOMContentLoaded', () => {
    console.log(getFormData(formId));
});