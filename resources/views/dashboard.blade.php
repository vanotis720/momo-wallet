<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tableau de bord
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-2">Solde du portefeuille</h3>
                    <div class="text-2xl font-bold">{{ number_format($user->balance, 2) }} {{ $user->currency ?? 'USD' }}
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('transactions.deposit') }}"
                            class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                            Dépôt
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">Transactions récentes</h3>
                    @if ($transactions->isEmpty())
                        <p>Aucune transaction trouvée.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Date
                                        </th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                            Montant</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">
                                            Statut</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Note
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($transactions as $transaction)
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap">
                                                {{ $transaction->created_at?->format('Y-m-d H:i') }}</td>
                                            <td class="px-4 py-2 whitespace-nowrap">
                                                {{ number_format($transaction->amount ?? 0, 2) }}
                                                {{ $user->currency }}
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap">
                                                <span
                                                    class="text-sm text-white font-bold rounded-full px-4 py-1 {{ $transaction->status == 'completed' ? 'bg-green-600' : ($transaction->status == 'failed' ? 'bg-red-500' : 'bg-yellow-500') }}">{{ ucfirst($transaction->status) }}</span>
                                            </td>
                                            <td class="px-4 py-2 whitespace-nowrap">{{ $transaction->note ?? '-' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
