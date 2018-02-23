/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import CompaniesIndex from './components/companies/CompaniesIndex.vue';
import CompaniesCreate from './components/companies/CompaniesCreate.vue';
import CompaniesEdit from './components/companies/CompaniesEdit.vue';

import ImagesIndex from './components/images/ImagesIndex.vue';
import ImageEdit from './components/images/ImageEdit.vue';

import CommentsIndex from './components/comments/CommentsIndex.vue';

const routes = [
    {
        path: '/',
        components: {
            imagesIndex: ImagesIndex
        }
    },
    {path: '/edit-image/:id', component: ImageEdit, name: 'editImage'},
    {path: '/admin/companies/create', component: CompaniesCreate, name: 'createCompany'},
    {path: '/admin/companies/edit/:id', component: CompaniesEdit, name: 'editCompany'},
    {path: '/comments', component: CommentsIndex, name: 'indexComments'},
    // {path: '/edit-image/:id', component: ImageEdit, name: 'editImage'},
    // {path: '/admin/companies/create', component: CompaniesCreate, name: 'createCompany'},
    // {path: '/admin/companies/edit/:id', component: CompaniesEdit, name: 'editCompany'},


]

Vue.component('comments', require('./components/comments/CommentsIndex'));

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')