import AppListing from '../app-components/Listing/AppListing';
import { methods } from './Media'

Vue.component('medium-listing', {
    mixins: [AppListing],
    methods: {
        ...methods
    }
});
