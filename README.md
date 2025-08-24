# 🚀 Laravel + Vue SpaceTraders Control

A **Laravel 12 + Vue 3 (Inertia.js)** learning project that connects to the [SpaceTraders API](https://spacetraders.io/).  
This app lets you **manually control your fleet**, **monitor progress on a dashboard**, and eventually **automate tasks** like mining and trading.

---

## ✨ Features

### ✅ Manual Fleet Control
- Ship list with status & cargo
- Dock, orbit, navigate, and mine via UI
- Error handling with Vue notifications

### 📊 Game Dashboard
- Agent overview (credits, HQ, faction)
- Fleet stats in tables and charts
- Recent activity log
- Background sync for live data

### 🤖 Automation
- Background jobs for mining loops
- Start/Stop automation from dashboard
- Job logs visible in UI

---

## 🛠️ Tech Stack

- [Laravel 12](https://laravel.com/) — Backend framework
- [Inertia.js](https://inertiajs.com/) — Laravel ↔ Vue bridge
- [Vue 3](https://vuejs.org/) — Frontend
- [TailwindCSS](https://tailwindcss.com/) — Styling
- [MySQL/Postgres] — Database
- [Laravel Scheduler](https://laravel.com/docs/scheduling) — Data sync
- [Laravel Queues](https://laravel.com/docs/queues) — Automation

---

## 🚀 Getting Started

### 1. Clone & Install
```bash
git clone https://github.com/yourusername/spacetraders-control.git
cd spacetraders-control
composer install
npm install && npm run build
