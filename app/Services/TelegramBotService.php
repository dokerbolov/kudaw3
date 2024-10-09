<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramBotService
{
    protected $apiUrl;
    protected $botToken;
    protected $chatId;

    public function __construct()
    {
        $this->botToken = env('TELEGRAM_BOT_TOKEN');
        $this->apiUrl = "https://api.telegram.org/bot{$this->botToken}/";
        $this->chatId = env('TELEGRAM_BOT_CHAT_ID');
    }

    /**
     * Send a message to a Telegram chat.
     *
     * @param string $message
     * @return array
     */
    public function sendMessage(string $message): array
    {
        $response = Http::post("{$this->apiUrl}sendMessage", [
            'chat_id' => $this->chatId,
            'text' => $message,
            'parse_mode' => 'HTML'
        ]);

        return $response->json();
    }
}
