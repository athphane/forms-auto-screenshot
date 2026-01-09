import {
    csrfAdder,
    select2Custom,
    loaders,
    lang,
    utilities,
    submitConfirmation,
    dateInput,
    fileUploadInput
} from '@javaabu/js-utilities';

import { mapInput } from '@javaabu/js-map-selector';

csrfAdder.init();
select2Custom.init();
loaders.init();

window.toggleLoading = loaders.toggleLoading;
window.togglePreloader = loaders.togglePreloader;

/**
 * Lang
 */
lang.init();
window.__ = lang.__;

/**
 * Utilities
 */
window.restrictCharacters = utilities.restrictCharacters;
window.slugify = utilities.slugify;
window.removeFromHead = utilities.removeFromHead;
window.randString = utilities.randString;
window.titleCase = utilities.titleCase;
window.redirectPage = utilities.redirectPage;
window.getJsonFormData = utilities.getJsonFormData;
window.setTooltip = utilities.setTooltip;
window.hideTooltip = utilities.hideTooltip;
window.e = utilities.e;
window.notify = utilities.notify;
window.showValidationErrorMsg = utilities.showValidationErrorMsg;
window.showAlerts = utilities.showAlerts;

/**
 * Submit Confirmation
 */
submitConfirmation.init();

/**
 * Date Input
 */
dateInput.init();

/**
 * File upload input
 */
fileUploadInput.init();

/**
 * Map Selector
 */
window.mapInput = mapInput;
mapInput.init();

$(document).ready(function () {

    //


});

$.fn.select2.defaults.set('theme', 'bootstrap-5');
