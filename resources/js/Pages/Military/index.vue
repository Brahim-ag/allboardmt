<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                militaire
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
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
                <td>{{militaire.Number}}</td>
                <td>{{militaire.date}}</td>
                <td>{{militaire.NumberPosition}}</td>
                <td>{{militaire.dateSignature}}</td>
                <td>{{militaire.dateStart}}</td>
                <td>{{militaire.NumberRein}}</td>
                <td>{{militaire.dateSignatureRein}}</td>
                <td>{{militaire.dateStartRein}}</td>

                    <td>
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

export default {
    props: ["employe_id"],
    data() {
        return {
            militaires: [],
        };
    },
    components: {
        AppLayout,
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
