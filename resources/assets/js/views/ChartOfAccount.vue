<template>
    <div>
        <h2>Chart of Accounts</h2>
        <button>Add</button>
        <table>
            <thead>
                <td>ID</td>
                <td>Name</td>
            </thead>
            <tbody>
                <tr v-for="account in accounts">
                    <td>{{ account.id }}</td>
                    <td>{{ account.name }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                accounts: [],
                accountTypes: [],
            }
        },
        mounted() {
            // this.getAccountTypes();
            this.getAccounts();
        },
        methods: {
            // getAccountsTypes() {
            //     this.$http.get('/api/chart-of-accounts').then(response => {
            //         console.log(response)
            //     });
            // },

            getAccounts() {
                this.$http.get('/api/chart-of-accounts').then(response => {
                    this.accounts = response.data;
                });
            }
        }
    }
</script>
