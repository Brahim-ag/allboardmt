<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                horscadre
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"> 
            <table  class="border-collapse border table-auto">
               <tr>
                <th>Administration d'Origine</th>
                <th>Administration d'Accueil </th>
                <th>Mission</th>
                <th>Type de Mouvement</th>
                <th>Motif</th>
                <th>Durée</th>
                <th>Numéro d'Acte</th>
                <th>Date de Signature d'Acte</th>
                <th>Date d'Effet d'Acte</th>
                <th>Numéro de Visa CF</th>
                <th>Date d'Effet CF</th>
 
            </tr>

                <tr v-for="(horscadre, index) in horscadres" :key="index">
                <td>{{ horscadre.source }}</td>
                <td>{{ horscadre.focus }}</td>
                <td>{{ horscadre.mission }}</td>
                <td>{{ horscadre.typeM }}</td>
                <td>{{ horscadre.motif }}</td>
                <td>{{ horscadre.duree }}</td>
                <td>{{ horscadre.number }}</td>
                <td>{{ horscadre.dateSign }}</td>
                <td>{{ horscadre.dateEffe }}</td>
                <td>{{ horscadre.numberCf }}</td>
                <td>{{ horscadre.dateEffeCF }}</td>
                    <td>
                        <inertia-link :href="`/horscadre/edit/${horscadre.id}`"> modifier </inertia-link>

                        
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/horscadre/create/${this.employe_id}`">Ajouter</inertia-link>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    props: ["employe_id"],
    data() {
        return {
            horscadres: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/horscadre/getall/" + this.employe_id)
                .then((response) => {
                    this.horscadres = response.data;
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
