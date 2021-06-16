<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Regimes Disciplinaires
            </h2>
        </template>
        <div class="flex max-w-8xl mx-auto py-10 sm:px-2 lg:px-8">

         <div class="container mx-auto shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        
            <table class="table-auto min-w-full divide-y divide-gray-200">
                <tr>
                <th>Degré de la Sanction</th>
            <th>Date de la Faute</th>
            <th>Type de Sanction</th>
           
            <th>Type Sanction Commission</th>
            
            <th>Date de Signature d'Acte</th>
            <th>Date d'Effet d'Acte</th>
 
            </tr>

                <tr v-for="(regim, index) in regims" :key="index">
                     <td class="px-2 py-4 whitespace-nowrap">{{ regim.typef }}<br> <small>{{ regim.degre  }}</small></td>
                <td class="px-2 py-4 whitespace-nowrap">{{ regim.datef }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ regim.typeS }}</td>

                <td class="px-2 py-4 whitespace-nowrap">{{ regim.typeSonctCom }} <br> <small>{{ regim.degreSonctCom }}</small></td>
                <td class="px-2 py-4 whitespace-nowrap">{{ regim.datesign }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ regim.dateeff }}</td>

                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/regim/edit/${regim.id}`">
                            Modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
        </div>
           <inertia-link :href="`/regim/create/${this.employe_id}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
                >Ajouter</inertia-link>
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
            regims: [],
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
                .get("/api/regim/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.regims = response.data;
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
