<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Parcours Scolaire
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"> 
            <table  class="border-collapse border table-auto">
                <tr>
                    <th class="w-1/2">Niveau d'Etude</th>
                    <th class="w-1/2">Diplôme</th>
                    <th class="w-1/2">Domaine et Filière</th>
                    <th class="w-1/2">Spécialité</th>
                    <th class="w-1/2">Etablissement d'Enseignement</th>
                    <th class="w-1/2">Date d'Obtention</th>
                </tr>

                <tr v-for="(parcour, index) in parcours" :key="index">
                    <td>{{ parcour.level }}</td>
                    <td>{{ parcour.gradution }}</td>
                    <td>{{ parcour.postbac }}</td>
                    <td>{{ parcour.spec }}</td>
                    <td>{{ parcour.whereU }}</td>
                    <td>{{ parcour.year }}</td>
                    <td>
                        <inertia-link :href="`/parcour/edit/${parcour.id}`"> modifier </inertia-link>

                        
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/parcour/create/${this.employe_id}`">Ajouter</inertia-link>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    props: ["employe_id"],
    data() {
        return {
            parcours: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/parcour/getall/" + this.employe_id)
                .then((response) => {
                    this.parcours = response.data;
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
