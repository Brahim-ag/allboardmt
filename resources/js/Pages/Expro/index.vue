<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Expérience Professionnelle Externe
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-2 lg:px-8">
            <table class="min-w-full divide-y divide-gray-200">
                <tr></tr>
                <tr>
                    <th>GRADE / FONCTION / POSTE</th>
                    <th>ADMINISTRATION OU ORGANISME </th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                </tr>

                <tr v-for="(expro, index) in expros" :key="index">
                    <td class="px-2 py-4 whitespace-nowrap">{{ expro.grade }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ expro.admin }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ expro.dateStart }}</td>
                    <td class="px-2 py-4 whitespace-nowrap">{{ expro.dateEnd }}</td>
                   
                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/expro/edit/${expro.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/expro/create/${this.employe_id}`"
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
            expros: [],
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
                .get("/api/expro/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.expros = response.data;
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
