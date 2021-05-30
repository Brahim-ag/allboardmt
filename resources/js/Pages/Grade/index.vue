<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                grade
            </h2>
        </template>
        
        <div class="flex max-w-8xl mx-auto py-10 sm:px-2 lg:px-8">
            
      <div class="py-2 align-middle inline-block min-w-full sm:px-2 lg:px-8">
           <inertia-link :href="`/grade/create/${this.employe_id}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
                >Ajouter</inertia-link
            >
            <table class="min-w-full divide-y divide-gray-200">
                <tr>
                    <th>Grade Occupé</th>
                    <th>Motif de promotion:</th>
                    <th>Type de Mouvement</th>
                    <th>Type d'Acte</th>
                    <th>Numéro d'Acte</th>
                    <th>Date de Signature d'Acte</th>
                    <th>Date d'Effet d'Acte</th>
                    <th>Nouveau Echelon</th>
                    <th>Numéro de Visa CF</th>
                    <th>Date de Visa CF</th>
                    <th>Date d'Installation</th>
                </tr>

                <tr v-for="(grade, index) in grades" :key="index">
                  <td class="px-2 py-4 whitespace-nowrap">{{grade.grade}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.type}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.typeM}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.typeDact}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.Number}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.dateSignature}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.dateStart}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.newEchelon}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.nVF}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.dateVisaRF}}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{grade.dateIns}}</td>

                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link
                            :href="`/grade/edit/${grade.id}`"
                        >
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
           
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
    props: ["employe_id"],
    data() {
        return {
            grades: [],
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
                .get("/api/grade/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.grades = response.data;
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
