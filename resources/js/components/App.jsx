import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import AppLayout from '../layouts/AppLayout';
import HomePage from '../pages/HomePage';
import VendorPage from '../pages/VendorPage';
import TicketPage from '../pages/TicketPage';

export default function App() {
    return (
        <BrowserRouter>
            <AppLayout>
                <Routes>
                    <Route path="/" element={<HomePage />} />
                    <Route path="/vendors" element={<VendorPage />} />
                    <Route path="/ticket" element={<TicketPage />} />
                </Routes>
            </AppLayout>
        </BrowserRouter>
    );
}
