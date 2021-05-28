<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                stages
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr></tr>
                <tr>
                    <th>Stage Interne</th>
                    <th>Objet du Stage</th>
                    <th>Date</th>
                    <th>Durée</th>
                    <th>établissement</th>
                </tr>

                <tr v-for="(stage, index) in stages" :key="index">
                    <td>{{ stage.intern }}</td>
                    <td>{{ stage.objet }}</td>
                    <td>{{ stage.date }}</td>
                    <td>{{ stage.duree }}</td>
                    <td>{{ stage.etabili }}</td>
                    <td>
                        <inertia-link :href="`/stage/edit/${stage.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/stage/create/${this.employe_id}`"
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
            stages: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/stage/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.stages = response.data;
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
