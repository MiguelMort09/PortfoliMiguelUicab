<script lang="ts" setup></script>

<template>
    <svg
        class="absolute inset-0 w-full h-full"
        viewBox="0 0 100 100"
        xmlns="http://www.w3.org/2000/svg"
    >
        <defs>
            <filter id="glow">
                <feGaussianBlur in="SourceAlpha" stdDeviation="3" />
                <feMerge>
                    <feMergeNode />
                    <feMergeNode in="SourceGraphic" />
                </feMerge>
            </filter>
        </defs>
        <g>
            <line
                filter="url(#glow)"
                stroke="red"
                stroke-width="0.5"
                x1="50"
                x2="50"
                y1="0"
                y2="100"
            >
                <animate
                    attributeName="y2"
                    begin="0s"
                    dur="1s"
                    repeatCount="indefinite"
                    values="0;100"
                />
            </line>
            <line
                filter="url(#glow)"
                stroke="red"
                stroke-width="0.5"
                x1="0"
                x2="100"
                y1="50"
                y2="50"
            >
                <animate
                    attributeName="x2"
                    begin="0s"
                    dur="1s"
                    repeatCount="indefinite"
                    values="0;100"
                />
            </line>
            <line
                filter="url(#glow)"
                stroke="red"
                stroke-width="0.5"
                x1="50"
                x2="0"
                y1="0"
                y2="50"
            >
                <animate
                    attributeName="x2"
                    begin="0.5s"
                    dur="1s"
                    repeatCount="indefinite"
                    values="0;50"
                />
                <animate
                    attributeName="y2"
                    begin="0.5s"
                    dur="1s"
                    repeatCount="indefinite"
                    values="0;50"
                />
            </line>
            <line
                filter="url(#glow)"
                stroke="red"
                stroke-width="0.5"
                x1="100"
                x2="50"
                y1="50"
                y2="0"
            >
                <animate
                    attributeName="x1"
                    begin="0.5s"
                    dur="1s"
                    repeatCount="indefinite"
                    values="100;50"
                />
                <animate
                    attributeName="y1"
                    begin="0.5s"
                    dur="1s"
                    repeatCount="indefinite"
                    values="50;0"
                />
            </line>
        </g>
    </svg>
</template>

<style scoped></style>
