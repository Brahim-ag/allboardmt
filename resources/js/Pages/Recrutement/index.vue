<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Recrutement
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr>
                 <th>Grade</th>
            <th>Type de Mouvement</th>
            <th>Type d'Acte</th>
            <th>Numéro d'Acte</th>
            <th>Date de Signature d'Acte</th>
            <th>Date d'Effet d'Acte</th>
            <th>Numéro de Visa CF</th>
            <th>Date de Visa CF</th>
            <th>Date d'Installation</th>
            <th>Structure d'Affectation</th>
 
            </tr>

                <tr v-for="(recrutement, index) in recrutements" :key="index">
                  <td>{{ recrutement.grade }}</td>
                <td>{{ recrutement.typem }}</td>
                <td>{{ recrutement.typep }}</td>
                <td>{{ recrutement.number }}</td>
                <td>{{ recrutement.dateEffect }}</td>
                <td>{{ recrutement.dateSignature }}</td>
                <td>{{ recrutement.NumberVisaCf }}</td>
                <td>{{ recrutement.dateVisaCf }}</td>
                <td>{{ recrutement.dateInsta }}</td>
                <td>{{ recrutement.structure }}</td>

                    <td>
                        <inertia-link :href="`/recrutement/edit/${recrutement.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/recrutement/create/${this.employe_id}`"
                >Ajouter</inertia-link
            >
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    props: ["employe_id"],
    data() {
        return {
            recrutements: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/recrutement/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.recrutements = response.data;
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
