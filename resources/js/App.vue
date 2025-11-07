<template>
  <div class="container">
    <Sidebar @tab-selected="updateTab" />

    <div class="main-content">
      <router-view/>
    </div>
  </div>
</template>

<script>
import Sidebar from "./components/Sidebar.vue";


export default {
  name: "App",
  components: { Sidebar,
                
   },
  data() {
    return {
      activeTab: "Students",
    };
  },
  methods: {
    updateTab(tab) {
      this.activeTab = tab;
    },
  },
};
</script>

<style >
.container {
  display: flex;
  height: 100vh;
}

.main-content {
  flex-grow: 1;
  margin-left: 230px;
  padding: 2rem;
  background-color: #f8fafc;
  color: #1e293b;
  font-family: "Segoe UI", sans-serif;
}

.add-student-page {
  padding: 2rem;
  background-color: #f8fafc; /* content area bg */
  min-height: 100vh;
}

.page-title {
  font-size: 1.8rem;
  margin-bottom: 1rem;
  color: #1e293b;
}

.student-form {
  max-width: 500px;
  background: #fff;
  padding: 1.5rem;
  border-radius: 0.5rem;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 1rem;
}

.form-group label {
  display: block;
  font-weight: 500;
  margin-bottom: 0.5rem;
}

.form-group input {
  width: 100%;
  padding: 8px 12px;
  border: 1px solid #cbd5e1;
  border-radius: 0.25rem;
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: #1e293b;
  color: #fff;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
  font-weight: 500;
  transition: background 0.3s;
}

button[type="submit"]:hover {
  background-color: #334155;
}

.success {
  margin-top: 1rem;
  color: green;
}

.error {
  margin-top: 1rem;
  color: red;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th,
td {
  text-align: left;
}

tr:hover {
  background-color: #f9fafb;
}

.add-enrollment-page {
  padding-left: 2rem;
  padding-right: 2rem;
  padding-bottom: 2rem;
  background-color: #f8fafc;
  min-height: 100vh;
}

.edit-student-page {
  padding: 2rem;
  background-color: #f8fafc;
  min-height: 100vh;
}

.sidebar {
  width: 230px;
  height: 100vh;
  background-color: #1e293b;
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 1rem;
  position: fixed;
  font-family: inherit;
}

/* Header */
.sidebar-header {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-bottom: 2rem;
}

.sidebar-header .logo {
  font-size: 2rem;
}

.sidebar-header h2 {
  font-size: 1.5rem;
  color: #facc15;
}

/* Menu items */
.sidebar-menu {
  list-style: none;
  padding: 0;
  width: 100%;
}

.sidebar-menu li {
  font-weight: 500;
  border-left: 4px solid transparent;
}

.sidebar-menu li a {
  display: block;
  width: 100%;
  padding: 12px 20px;
  color: inherit;
  text-decoration: none;
}

.sidebar-menu li a:hover {
  background-color: #f8fafc;
  color: #1e293b;
  width: 90%;
}

/* Active tab styles applied to li */
.sidebar-menu li.active {
  background-color: #f8fafc; /* content area background */
  color: #1e293b; /* dark text for content area */
  border-left: 4px solid #facc15; /* yellow left indicator */
}


</style>
