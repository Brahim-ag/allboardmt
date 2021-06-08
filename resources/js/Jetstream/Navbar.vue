<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <Disclosure as="nav" class="bg-gray-800" v-slot="{ open }">
        <div class="max-w-7xl mx-auto px-2 sm:px-2 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div
                    class="
                        absolute
                        inset-y-0
                        left-0
                        flex
                        items-center
                        sm:hidden
                    "
                >
                    <!-- Mobile menu button-->
                    <DisclosureButton
                        class="
                            inline-flex
                            items-center
                            justify-center
                            p-2
                            rounded-md
                            text-gray-400
                            hover:text-white
                            hover:bg-gray-700
                            focus:outline-none
                            focus:ring-2 focus:ring-inset focus:ring-white
                        "
                    >
                        <span class="sr-only">Open main menu</span>
                        <MenuIcon
                            v-if="!open"
                            class="block h-6 w-6"
                            aria-hidden="true"
                        />
                        <XIcon
                            v-else
                            class="block h-6 w-6"
                            aria-hidden="true"
                        />
                    </DisclosureButton>
                </div>
                <div
                    class="
                        flex-1 flex
                        items-center
                        justify-center
                        sm:items-stretch
                        sm:justify-start
                    "
                >
                    <!-- <div class="hidden sm:block sm:ml-8">
                        <div class="flex space-x-4">
                            <a
                                v-for="item in navigation"
                                :key="item.name"
                                :href="item.href"
                                :class="[
                                    item.current
                                        ? 'bg-gray-900 text-white'
                                        : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                                    'px-3 py-2 rounded-md text-sm font-medium',
                                ]"
                                :aria-current="
                                    item.current ? 'page' : undefined
                                "
                                >{{ item.name }}
                                </a
                            >
                        </div>
                    </div> -->
                </div>
                <div
                    class="
                        absolute
                        inset-y-0
                        right-0
                        flex
                        items-center
                        pr-2
                        sm:static
                        sm:inset-auto
                        sm:ml-6
                        sm:pr-0
                    "
                >
                    <!-- Profile dropdown -->
                    <Menu
                        as="div"
                        class="ml-3 relative"
                        v-for="(item, i) in navigation"
                        :key="i"
                    >
                        <div>
                            <MenuButton
                                class="
                                    bg-gray-800
                                    flex
                                    text-sm
                                    rounded-full
                                    focus:outline-none
                                    focus:ring-2
                                    focus:ring-offset-2
                                    focus:ring-offset-gray-800
                                    focus:ring-white
                                "
                            >
                                <span class="sr-only">Open user menu</span>
                                <a
                                    :key="item.name"
                                    :href="item.href"
                                    :class="[
                                        item.current
                                            ? 'bg-gray-900 text-white'
                                            : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                                        'px-3 py-2 rounded-md text-sm font-medium',
                                    ]"
                                    :aria-current="
                                        item.current ? 'page' : undefined
                                    "
                                    >{{ item.name }}
                                </a>
                            </MenuButton>
                        </div>
                        <transition
                            enter-active-class="transition ease-out duration-100"
                            enter-from-class="transform opacity-0 scale-95"
                            enter-to-class="transform opacity-100 scale-100"
                            leave-active-class="transition ease-in duration-75"
                            leave-from-class="transform opacity-100 scale-100"
                            leave-to-class="transform opacity-0 scale-95"
                        >
                            <MenuItems
                                class="
                                    origin-top-right
                                    absolute
                                    right-0
                                    mt-2
                                    w-48
                                    rounded-md
                                    shadow-lg
                                    py-1
                                    bg-white
                                    ring-1 ring-black ring-opacity-5
                                    focus:outline-none
                                "
                            >
                                <MenuItem
                                    v-for="(itemsub, i) in item.sub"
                                    :key="i"
                                >
                                    <a
                                        :href="itemsub.href"
                                        :class="[
                                            active ? 'bg-gray-100' : '',
                                            'block px-2 py-2 text-sm text-gray-700',
                                        ]"
                                        >{{ itemsub.name }}</a
                                    >
                                </MenuItem>
                            </MenuItems>
                        </transition>
                    </Menu>
                </div>
            </div>
        </div>

        <DisclosurePanel class="sm:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a
                    v-for="item in navigation"
                    :key="item.name"
                    :href="item.href"
                    :class="[
                        item.current
                            ? 'bg-gray-900 text-white'
                            : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                        'block px-3 py-2 rounded-md text-base font-medium',
                    ]"
                    :aria-current="item.current ? 'page' : undefined"
                    >{{ item.name }}</a
                >
            </div>
        </DisclosurePanel>
    </Disclosure>
</template>

<script>
import { ref } from "vue";
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
} from "@headlessui/vue";
import { BellIcon, MenuIcon, XIcon } from "@heroicons/vue/outline";

export default {
    data() {
        return {
            navigation: [
                {
                    name: "INFORMATIONS PERSONNELLES",
                    href: "#",
                    current: false,
                    sub: [
                        {
                            name: "FORMATIONS EXTERNES",
                            href: "/formation/"+this.info,
                        },
                        { name: "LANGUAGES", href: "/antecejudi/"+this.info },
                        { name: "ANTÉCÉDENTS JUDICIAIRES", href: "/antecejudi/"+this.info },
                        { name: "PARCOURS SCOLAIRE", href: "/parcour/"+this.info },
                        { name: "Expérience Professionnelle Externe ", href: "/expro/"+this.info },
                        { name: "ENFANTS", href: "/child/"+this.info },
                        { name: "Conjoints", href: "/spouce/"+this.info },
                    ],
                },
                {
                    name: "PARCOURS PERSONNELLES",
                    href: "#",
                    current: false,
                    sub: [
                        {
                            name: "STAGES",
                            href: "/stage/"+this.info,
                        },
                        { name: "RECRUTEMENT", href: "/recrutement/"+this.info },
                        { name: "ECHELONS", href: "/echelons/"+this.info },
                        { name: "GRADES", href: "/grade/"+this.info },
                        { name: "FORMATIONS INTERNES ", href: "/formationint/"+this.info },
                        { name: "EVALUATIONS", href: "/antecejudi/"+this.info },
                        { name: "CESSATION", href: "/cessation/"+this.info },
                    ],
                },
                {
                    name: "POSITION STATUTAIRE",
                    href: "#",
                    current: false,
                    sub: [
                        {
                            name: "DETACHEMENTS",
                            href: "/detachement/"+this.info,
                        },
                         {
                            name: "MISE A LA DISPOSITION",
                            href: "/disposition/"+this.info,
                        },
                        { name: "MUTATIONS", href: "/mutations/"+this.info },
                        { name: "MISE EN DISPONIBILITÉ", href: "/dispo/"+this.info },
                        { name: "HORS-CADRE", href: "/horscadre/"+this.info },
                        { name: "SERVICE NATIONAL", href: "/militaire/"+this.info },
                    ],
                },
                { name: "POSTES SUPERIEURS", href: "/postesup/"+this.info, current: false },
                { name: "FONCTIONS SUPERIEURS", href: "/fonctionsups/"+this.info, current: false },
                { name: "REGIME DISCIPLINAIRE", href: "/regim/"+this.info, current: false },
                { name: "CONGES ET ABSCENCES", href: "/conge/"+this.info, current: false },
            ]
        };
    },

    props: ["info"],
    components: {
        Disclosure,
        DisclosureButton,
        DisclosurePanel,
        Menu,
        MenuButton,
        MenuItem,
        MenuItems,
        BellIcon,
        MenuIcon,
        XIcon,
    },
    setup() {
        const open = ref(false);

        return {
            //navigation,
            open,
        };
    },
    created() {},
};
</script>
