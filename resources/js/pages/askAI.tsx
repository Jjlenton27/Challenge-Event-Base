import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import { askAI, dashboard } from '@/routes';
import type { BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },
    {
        title: 'AskAI',
        href: askAI().url,
    },
];

export default function AskAI() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                <div className={'flex flex-col w-1/2 m-auto justify-center'}>
                    <h1 className={'text-center font-bold'}>ASK THE AI</h1>
                    <input
                        className={
                            'block w-full rounded-2xl border border-purple-400 p-5'
                        }
                        placeholder={'Your Question?'}
                    />
                </div>
            </div>
        </AppLayout>
    );
}
