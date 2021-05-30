<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                militaire
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-2 lg:px-8">
            <table class="min-w-full divide-y divide-gray-200">
                <tr>
            <th>Numéro Justification  </th>
            <th>Date Justification </th>
            <th>Numéro de l’acte de mise en position  </th>
            <th>date de Signature de l’acte de mise en position  </th>
            <th>date d'effet de l’acte de mise en position</th>
            <th>Numéro de l’acte de Réintégration  </th>
            <th>date de Signature de l’acte de Réintégration  </th>
            <th>date d'effet de l’acte de Réintégration</th>
            
        </tr>
            <tr v-for="(militaire, index) in militaires" :key="index">
                <td class="px-2 py-4 whitespace-nowrap">{{militaire.Number}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{militaire.date}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{militaire.NumberPosition}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{militaire.dateSignature}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{militaire.dateStart}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{militaire.NumberRein}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{militaire.dateSignatureRein}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{militaire.dateStartRein}}</td>

                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/militaire/edit/${militaire.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/militaire/create/${this.employe_id}`"
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
            militaires: [],
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
                .get("/api/militaire/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.militaires = response.data;
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
