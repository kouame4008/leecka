<template>
<div>
    <section>
        <section id="app-content">
            <div id="app-sidebar" :class="active ? sidebar : ''" @mouseleave="handleLeave" @mouseenter="handleUp">
                <div class="header-sidebar" slot="header">
                    <img class="con-example-images" src="/images/logo/logo-2.jpg" />
                </div>
                <vs-divider />
                <div>
                    <a-menu :default-selected-keys="[1]" :open-keys.sync="openKeys" mode="inline" @click="handleClick">
                        <a-menu-item v-for="route in routes" :key="route.key">
                            <a-space>
                                <span class="menu-icon">
                                    <font-awesome-icon :icon="route.icon" style="font-size : 20px" /></span>
                                <span class="menu-name">{{ route.name }}</span>
                            </a-space>
                        </a-menu-item>
                    </a-menu>
                </div>
            </div>
            <div id="app-wrapper" :class="active ? margin : ''">

                <vs-navbar v-model="activeItem" class="nabarx">
                    <div slot="title">
                        <vs-navbar-title class="navtitle ">
                            <a-button class="app-header-icon" @click="active=!active">
                                <a-icon v-if="active==false" type="menu-fold" style="font-size: 25px;" />
                                <a-icon v-if="active==true" type="menu-unfold" style="font-size: 25px;" />
                            </a-button>
                        </vs-navbar-title>
                    </div>

                    <div>
                        <a-space>
                            <span>
                                <div class="user-info">
                                    <span class="user-info-titre"> SAV RDV </span>
                                    <span class="user-info-sub"> Rendez-vous </span>
                                </div>
                            </span>
                            <a-avatar :size="40" icon="user" shape="square" />
                        </a-space>
                    </div>
                </vs-navbar>
                <slot />
            </div>
        </section>
    </section>
</div>
</template>

<script>
import routes from '../../router/routes';

export default {
    data: () => ({
        activeItem: 0,
        active: false,
        sidebar: 'show',
        margin: 'margin',
        mouse: false,
        current: ['mail'],
        openKeys: ['sub1'],
        routes: routes
    }),
    methods: {
        handleUp() {
            // alert ()
            if (this.active == true && this.mouse == false) {
                this.active = false
                this.mouse = true
            }
        },
        handleLeave() {
            if (this.active == false && this.mouse == true) {
                this.active = true
                this.mouse = false
            }
        },
        handleClick(e) {
            console.log('click', e);
        },
        titleClick(e) {
            console.log('titleClick', e);
        },
    }
}
</script>

<style>
.header-sidebar {
    display: flex;
    justify-content: center;
}

.con-example-images {
    width: 100%;
}

.ant-menu {
    width: auto;
    background: transparent !important;
}

.menu-name {
    color: #FFF;
    font-size: 1rem;
    font-weight: 600;
}

.ant-menu svg {
    color: #FFF !important;
}

.user-info-titre {
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    font-family: Versus, Poppins, sans-serif;
    color: rgb(36, 36, 122);
    display: block;
    position: relative;
    top: 8px;
    text-align: right;
}

.user-info-sub {
    font-weight: bold;
    color: #af090f;
    font-family: Poppins, Roboto, Oxygen, Ubuntu, "Helvetica Neue", sans-serif;
    text-align: right;
}

.ant-page-header-heading-title{
    font-weight: bold;
    font-family: Versus, sans-serif;
    text-transform: uppercase;
    overflow-wrap: break-word;
    font-size: 19px;}
</style>
