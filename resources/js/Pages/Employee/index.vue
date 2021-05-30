<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Liste des employés
            </h2>
            <menu></menu>
        </template>
        <div class="flex flex-col">
            <div class="mx-auto py-10 sm:px-3 lg:px-12">
                <div
                    class="
                        py-2
                        align-middle
                        inline-block
                        min-w-full
                        sm:px-2
                        lg:px-8
                    "
                >
                    <div
                        class="
                            shadow
                            overflow-hidden
                            border-b border-gray-200
                            sm:rounded-lg
                        "
                    >
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Nom et Prénom
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Wilaya
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Numéro Securite Social
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Numéro Mutuelle
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Type du Contrat
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Type du Contrat
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Type du Contrat
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Type du Contrat
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Type du Contrat
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    >
                                        Téléphone
                                    </th>
                                    <th
                                        scope="col"
                                        class="
                                            px-2
                                            py-3
                                            text-left text-xs
                                            font-medium
                                            text-gray-500
                                            uppercase
                                            tracking-wider
                                        "
                                    ></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr
                                    v-for="(employe, index) in employees"
                                    :key="index"
                                >
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        <inertia-link
                                            :href="`/employe/show/${employe.id}`"
                                        >
                                            {{ employe.name }}
                                            {{ employe.lastname }}
                                        </inertia-link>
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        {{ employe.wilaya }}
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        {{ employe.NsocialSecure }}
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        {{ employe.NMutu }}
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        {{ employe.typeContrat }}
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        {{ employe.typeContrat }}
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        {{ employe.typeContrat }}
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        {{ employe.typeContrat }}
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        {{ employe.typeContrat }}
                                    </td>
                                    <td class="px-2 py-4 whitespace-nowrap">
                                        {{ employe.telephone }}
                                    </td>

                                    <!-- <td class="border"><router-link :to="{name:'editEmploye',params:{id:employe.id}}" >Modifier</router-link></td> -->
                                    <td scope="col" class="relative px-2 py-3">
                                        <inertia-link
                                            class="
                                                text-indigo-600
                                                hover:text-indigo-900
                                            "
                                            :href="`/employe/edit/${employe.id}`"
                                        >
                                            Modifier</inertia-link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <inertia-link :href="`/employe/create/`"
                            >Ajouter</inertia-link
                        >
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

import JetActionMessage from "@/Jetstream/ActionMessage";
import JetActionSection from "@/Jetstream/ActionSection";
import JetButton from "@/Jetstream/Button";
import JetConfirmationModal from "@/Jetstream/ConfirmationModal";
import JetDangerButton from "@/Jetstream/DangerButton";
import JetDialogModal from "@/Jetstream/DialogModal";
import JetFormSection from "@/Jetstream/FormSection";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetLabel from "@/Jetstream/Label";
import JetSecondaryButton from "@/Jetstream/SecondaryButton";
import JetSectionBorder from "@/Jetstream/SectionBorder";

export default {
    components: {
         AppLayout,
        JetActionMessage,
        JetActionSection,
        JetButton,
        JetConfirmationModal,
        JetDangerButton,
        JetDialogModal,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
        JetSecondaryButton,
        JetSectionBorder,
    },
    data: function () {
        return {
            employees: [],
        };
    },
    methods: {
        getAll() {
            axios
                .get(
                    "api/employees/getall/" +
                        this.$page.props.auth.user.current_team_id
                )
                .then((response) => {
                    this.employees = response.data.data;
                    console.log(response.data.data);
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    created() {
        this.getAll();
    },
    computed: {
        user() {
            return this.$page.props.auth.user;
        },
    },
};
</script>
