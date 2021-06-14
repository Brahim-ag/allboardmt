<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mises à la Disposition 
            </h2>
        </template>
        <div class="px-2 mx-auto shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        
            <table class="table-auto min-w-full divide-y divide-gray-200">
               <tr>
                <!-- <th>Administration d'Origine</th>
                <th>Administration d'Accueil </th> -->
                <th>Type de Mouvement</th>
                <th>Motif</th>
                <th>Numéro d'Acte</th>
                <th>Date de Signature d'Acte</th>
                <!-- <th>Durée</th> -->
                <th>Date d'Effet d'Acte</th>
                <th>Numéro de Visa CF</th>
                <th>Date d'Effet CF</th>
                <th>Date de l’accord</th>
                <th>N° de l’accord</th>
                <!-- <th>Date Réintégration  :
</th>
                <th>Date d’installation :		
</th> -->
 
            </tr>

                <tr v-for="(disposition, index) in dispositions" :key="index">
                <!-- <td class="px-2 py-4 whitespace-nowrap">{{ disposition.source }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ disposition.focus }}</td> -->
                
                <td class="px-2 py-4 whitespace-nowrap text-xs">{{ disposition.typeM }}</td>
                <td class="px-2 py-4 whitespace-nowrap text-xs">{{ disposition.motif }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ disposition.numberAct }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ disposition.dateSignAct }}</td>
                <!-- <td class="px-2 py-4 whitespace-nowrap">{{ disposition.duree }}</td> -->
                <td class="px-2 py-4 whitespace-nowrap">{{ disposition.dateEffe }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ disposition.numberCf }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ disposition.dateEffeCF }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ disposition.numberActm }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ disposition.dateActm }}</td>
                <!-- <td class="px-2 py-4 whitespace-nowrap">{{ disposition.dateRei }}</td>
                <td class="px-2 py-4 whitespace-nowrap">{{ disposition.dateInstal }}</td> -->
                    <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/disposition/edit/${disposition.id}`">Modifier</inertia-link>

                        
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/disposition/create/${this.employe_id}`" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Ajouter</inertia-link>
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
            dispositions: [],
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
                .get("/api/disposition/getall/" + this.employe_id)
                .then((response) => {
                    this.dispositions = response.data;
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
