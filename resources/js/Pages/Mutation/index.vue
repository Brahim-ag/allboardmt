<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                mutation
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-2 lg:px-8">
            <table class="min-w-full divide-y divide-gray-200">
                <tr>
                    <th>Adminstration d'Origine</th>
                    <th>Adminstration d'Acceuil</th>
                    <th>Type de Mouvement</th>
                    <th>Numéro d'Acte</th>
                    <th>Date de Signature d'Acte</th>
                    <th>Date d'Effet d'Acte</th>
                </tr>

                <tr v-for="(mutation, index) in mutations" :key="index">
                    <td class="px-2 py-4 whitespace-nowrap">{{ mutation.from }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ mutation.to }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ mutation.type }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ mutation.Number }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ mutation.dateSignature }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ mutation.dateStart }}</td>
                    <td class="px-2 py-4 whitespace-nowrap"></td>

                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/mutations/edit/${mutation.id}`">
                            modifier
                        </inertia-link>
                    </td>
                    </tr>
            </table>
            <inertia-link :href="`/mutations/create/${this.employe_id}`"
                >Ajouter</inertia-link
            >
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
    props: ["employe_id"],
    data() {
        return {
            mutations: [],
        };
    },
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
    methods: {
        getAll() {
            axios
                .get("/api/mutations/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.mutations = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    created() {
        this.getAll();
    },
};
</script>
