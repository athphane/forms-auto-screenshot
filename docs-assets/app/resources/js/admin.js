import { mapInput } from '@javaabu/js-map-selector';

import {
    csrfAdder,
    select2Custom,
    loaders,
    lang,
    utilities,
    conditionalDisplay,
    postLinks,
    submitConfirmation,
    editModal,
    fileUploadInput,
    dateInput,
    slugInput,
    contentSearch,
    urlInput,
    selectAllCheckbox,
    codeInput,
    deletable,
    sortable,
    editSelected
} from '@javaabu/js-utilities';

/**
 * Utilities
 */
utilities.config.notify.template = '<div data-notify="container" class="col-xs-11 col-sm-4 alert alert-{0}" role="alert"><button type="button" aria-hidden="true" class="close" data-notify="dismiss">&times;</button><span data-notify="icon"></span> <span data-notify="title">{1}</span> <span data-notify="message">{2}</span><div class="progress" data-notify="progressbar"><div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div><a href="{3}" target="{4}" data-notify="url"></a></div>';

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
 * Lang
 */
lang.init();
window.__ = lang.__;

csrfAdder.init();
select2Custom.init();

/**
 * Loaders
 */
loaders.config.iconPrefix = 'zmdi';
loaders.config.loaderIcon = loaders.config.iconPrefix + '-spinner';
loaders.config.loaderAnimation = loaders.config.iconPrefix + '-spin ' + loaders.config.iconPrefix + '-pulse';
loaders.config.loadingElem = `<${loaders.config.loadingTag} class="${loaders.config.iconPrefix} ${loaders.config.loaderIcon} ${loaders.config.loaderAnimation} added-loader ${loaders.config.loadingClass} mr-2"></${loaders.config.loadingTag}> `;

loaders.init();
window.toggleLoading = loaders.toggleLoading;
window.togglePreloader = loaders.togglePreloader;

/**
 * Conditional Display
 */
conditionalDisplay.config.iconPrefix = 'zmdi';
conditionalDisplay.config.editIcon = conditionalDisplay.config.iconPrefix + '-edit';
conditionalDisplay.config.closeIcon = conditionalDisplay.config.iconPrefix + '-close';
conditionalDisplay.init();

/**
 * Post Links
 */
postLinks.init();

/**
 * Submit Confirmation
 */
submitConfirmation.init();

/**
 * Edit Modal
 */
editModal.init();

/**
 * File upload input
 */
fileUploadInput.init();

/**
 * Date Input
 */
dateInput.config.iconPrefix = 'zmdi';
dateInput.config.nextArrowIcon = dateInput.config.iconPrefix + '-long-arrow-right';
dateInput.config.prevArrowIcon = dateInput.config.iconPrefix + '-long-arrow-left';
dateInput.init();

/**
 * Slug Input
 */
slugInput.config.iconPrefix = 'zmdi';
slugInput.config.editIcon = slugInput.config.iconPrefix + '-edit';
slugInput.config.saveIcon = slugInput.config.iconPrefix + '-check';
slugInput.init();


/**
 * Content Search
 */
contentSearch.init();


urlInput.init();
selectAllCheckbox.init();
codeInput.init();
deletable.init();
sortable.init();
editSelected.init();

/**
 * Map Selector
 */
mapInput.config.iconPrefix = 'zmdi';
window.mapInput = mapInput;
mapInput.init();

$(document).ready(function() {

    if ($('[data-toggle="tooltip"]')[0]) {
        $('[data-toggle="tooltip"]').tooltip({
            trigger: 'click',
            delay: {show: 200, hide: 100}
        });
    }

    $('form.tab-form').on('submit', function (e) {
        togglePreloader(true);
    });
});

/**
 * Bootstrap hash link for tabs
 */
$(function() {
    var hash = window.location.hash;
    hash && $('ul.tab-nav a[href*="' + hash + '"]').tab('show');

    $('.tab-nav li:not(.disabled) > a[href*="#"]').click(function (e) {
        var href = $(this).prop('href');
        if (href.indexOf('#') != 0 && this.pathname.indexOf(window.location.pathname) != 0) {
            window.location.replace(href);
        }

        $(this).tab('show');
        var scrollmem = $('body').scrollTop() || $('html').scrollTop();
        window.location.hash = this.hash;
        $('html,body').scrollTop(scrollmem);
    });
});

window.getParameterByName = function (name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
};
